<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required',
            'username' => 'required',
            'password' => 'required'
        ];
    }

    //
    public function getCredentials()
    {

        $name =$this->get('name');
        $username = $this->get('username');

        if ($this->isEmail($username || $name)) {
            return [
                'email' => $username,$name,
                'password' => $this->get('password')
            ];
        }

        return $this->only('username', 'password');
    }
    //comprueba si el correo es válido
    private function isEmail($param)
    {
        $factory = $this->container->make(ValidationFactory::class);

        return ! $factory->make(
            ['username' => $param],
            ['username' => 'email']
        )->fails();
    }

}
