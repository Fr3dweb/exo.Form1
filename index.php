<?php

class Form
{
    protected string $form;

    public function __construct(string $method)
    {
        $this->form = "<form method=$method>";
    }

    public function setText(string $type, string $name, string $placeholder): void
    {
        $this->form .= "<input type=$type name=$name placeholder=$placeholder>";
    }

    public function setSubmit(): void
    {
        $this->form .= "<button type='submit'>Submit</button>";
    }

    public function getForm(): string
    {
        return $this->form .= "</form>";
    }
}

$form = new Form("get");
$form->setText("text", "Tomate", "Valider");
$form->setSubmit();
echo $form->getForm();

var_dump($_POST);
var_dump($_GET);


class Form2 extends Form
{
    public function setRadio(string $name): void
    {
        $this -> form .= "<label>$name</label>";
        $this-> form .= "<input type='radio' name='$name'>";
    }


    public function setCheckbox(): void
    {
        $this -> form .= "<input type='checkbox'>";
    }
}

$form2 = new Form2("post");
$form2 ->setRadio("Voulez valider ?");
$form2 -> setRadio("Cocher svp");
$form2 ->setCheckbox();
$form2 -> setSubmit();
echo $form2 -> getForm();

var_dump($_POST);






