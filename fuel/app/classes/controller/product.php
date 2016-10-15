<?php
class Controller_Product extends Controller_Base
{

	public function action_index()
	{
		$data['products'] = Model_Product::find('all');
		$this->template->title = "Products";
		$this->template->content = View::forge('product/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('product');

		if ( ! $data['product'] = Model_Product::find($id))
		{
			Session::set_flash('error', 'Could not find product #'.$id);
			Response::redirect('product');
		}

		$this->template->title = "Product";
		$this->template->content = View::forge('product/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Product::validate('create');

			if ($val->run())
			{
				$product = Model_Product::forge(array(
					'name' => Input::post('name'),
					'price' => Input::post('price'),
					'description' => Input::post('description'),
					'metadata' => Input::post('metadata'),
				));

				if ($product and $product->save())
				{
					Session::set_flash('success', 'Added product #'.$product->id.'.');

					Response::redirect('product');
				}

				else
				{
					Session::set_flash('error', 'Could not save product.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Products";
		$this->template->content = View::forge('product/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('product');

		if ( ! $product = Model_Product::find($id))
		{
			Session::set_flash('error', 'Could not find product #'.$id);
			Response::redirect('product');
		}

		$val = Model_Product::validate('edit');

		if ($val->run())
		{
			$product->name = Input::post('name');
			$product->price = Input::post('price');
			$product->description = Input::post('description');
			$product->metadata = Input::post('metadata');

			if ($product->save())
			{
				Session::set_flash('success', 'Updated product #' . $id);

				Response::redirect('product');
			}

			else
			{
				Session::set_flash('error', 'Could not update product #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$product->name = $val->validated('name');
				$product->price = $val->validated('price');
				$product->description = $val->validated('description');
				$product->metadata = $val->validated('metadata');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('product', $product, false);
		}

		$this->template->title = "Products";
		$this->template->content = View::forge('product/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('product');

		if ($product = Model_Product::find($id))
		{
			$product->delete();

			Session::set_flash('success', 'Deleted product #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete product #'.$id);
		}

		Response::redirect('product');

	}

}
