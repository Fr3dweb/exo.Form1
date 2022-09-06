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
    /**
     *
     * @param string $type
     * @param string $name
     * @param string $label
     * @param string $value
     * @param string $id
     * @return void
     */
    public function setRadioCheckbox(string $type , string $name, string $label, string $value, string $id = ''): void
    {
        $name .= '[]';
        $this -> form .= "<label for='$id'>$label</label>";
        $this-> form .= "<input type='$type' name='$name' id='$id' value='$value'>";
    }
}

$form2 = new Form2("post");
$form2 ->setRadioCheckbox('radio', 'nationality',"FR", 'fr', 'fr');
$form2 -> setRadioCheckbox('radio','nationality',"ENG" , 'eng', 'eng');
$form2 ->setRadioCheckbox('checkbox', 'metier',"dev", 'dev', 'dev');
$form2 -> setRadioCheckbox('checkbox','metier',"mobile" , 'mobile', 'mobile');
$form2 -> setSubmit();
echo $form2 -> getForm();

var_dump($_POST);






