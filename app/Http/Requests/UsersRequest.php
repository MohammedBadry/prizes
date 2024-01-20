<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest {

	/**
	 *
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 *
	 * Get the validation rules that apply to the request.
	 *
	 * @return array (onCreate,onUpdate,rules) methods
	 */
	protected function onCreate() {
		return [
			'name' => 'required|string',
			//'email' => 'required|email|unique:users',
			'mobile' => 'required|regex:/[0-9]{8}/|unique:users',
			'code' => 'nullable|string',
			//'photo_profile' => '' . it()->image() . '|nullable|sometimes',
			//'password' => 'required|max:255|min:6',
		];
	}

	protected function onUpdate() {
		return [
			'name' => 'required|string',
			//'email' => 'required|email|unique:users,email,' . request()->segment(2),
			'mobile' => 'required|regex:/[0-9]{8}/|unique:users,mobile,' . request()->segment(2),
			'code' => 'nullable|string',
			//'photo_profile' => '' . it()->image() . '|nullable|sometimes',
			//'password' => 'sometimes|nullable|max:255|min:6',
		];
	}

	public function rules() {
		return request()->isMethod('put') || request()->isMethod('patch') ?
		$this->onUpdate() : $this->onCreate();
	}

	/**
	 *
	 * Get the validation attributes that apply to the request.
	 *
	 * @return array
	 */
	public function attributes() {
		return [
			'name' => trans('admin.name'),
			'email' => trans('admin.email'),
			'mobile' => trans('admin.mobile'),
			'code' => 'nullable|string',
			'photo_profile' => trans('admin.photo_profile'),
			'password' => trans('admin.password'),
		];
	}

	/**
	 *
	 * response redirect if fails or failed request
	 *
	 * @return redirect
	 */
	public function response(array $errors) {
		return $this->ajax() || $this->wantsJson() ?
		response([
			'status' => false,
			'StatusCode' => 422,
			'StatusType' => 'Unprocessable',
			'errors' => $errors,
		], 422) :
		back()->withErrors($errors)->withInput(); // Redirect back
	}

}
