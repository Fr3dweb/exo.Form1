<?php

class Form {

    public string $form;

    function  __construct(string $method) {
        $this -> form = "<form method=$method action='votreréponseest'>";
    }

    public function setText(string $type, string $name, string $placeholder): void
    {
        $this -> form .= "<input type=$type name=$name placeholder=$placeholder>";
    }

    public function setSubmit(): void
    {
        $this -> form .= "<button type='submit'>Submit</button>";
    }

    public function getForm()
    {
        return $this -> form .= "</form>";
    }
}

$form = new Form("get");
$form->setText("text","Tomate","Valider");
$form -> setSubmit();
echo $form -> getForm();

var_dump($_POST);
var_dump($_GET);

