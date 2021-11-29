<?php


namespace App\Controller;


use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Entity\User;

class ResetPasswordAction
{
    /**
     * @var ValidatorInterface
     */
    private $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function __invoke(User $data)
    {
//        var_dump($data->getNewPassword(), $data->getNewRetypedPassword(), $data->getOldPassword(), $data->getRetypedPassword());
//        var_dump($data->getName(), $data->getPassword());
//        die();

        $this->validator->validate($data);
    }
}