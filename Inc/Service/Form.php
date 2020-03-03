<?php

namespace Inc\Service;

class Form
{

    private $errors;
    private $post;
    public function __construct($errors, $method = 'POST')
    {
        if ($method == 'POST') {
            $this->post = $_POST;
        } else {
            $this->post = $_GET;
        }
        $this->errors = $errors;
    }

    /**
     * label
     * @param $name string
     * @param $label string
     * @return string
     */
    public function label(string $name, string $label)
    {
        return '<br><label for="' . $name . '">' . $label . '</label>';
    }

    private function getValue($name)
    {
        if (!empty($_POST[$name])) {
            return $_POST[$name];
        } else {
            return '';
        }
    }

    public function input($name, $type)
    {
        return '<br><input type="' . $type . '" name="' . $name . '" id="' . $name . '" value="' . $this->getValue($name) . '" />';
    }

    public function submit($name, $value)
    {
        return '<br><input type="submit" name="' . $name . '" class="'. $name .'"'.$value.'/><br>';
    }

    public function textarea($name)
    {
        return '<br><textarea name="' . $name . '" id="' . $name . '">' . $this->getValue($name) . '</textarea><br>';
    }

    public function option($value)
    {
        return '<option value="' . $value . '">' . $value . '</option>';
    }

    public function optionMonth($name)
    {
        return '<select name="' . $name . '" id ="' . $name . '">
        <option value="Janvier">Janvier</option>
        <option value="Fevrier">Février</option>
        <option value="Mars">Mars</option>
        <option value="Avril">Avril</option>
        <option value="Mai">Mai</option>
        <option value="Juin">Juin</option>
        <option value="Juillet">Juillet</option>
        <option value="Aout">Août</option>
        <option value="Septembre">Septembre</option>
        <option value="Octobre">Octobre</option>
        <option value="Novembre">Novembre</option>
        <option value="Decembre">Décembre</option></select>';
    }

    public function optionYear($name, $getYear)
    {
        $years = '<select name="' . $name . '" id ="' . $name . '">';
        
        for ($year = 1970; $year <= 2020; $year++) {
            $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
            $years .= "<option value=$year $selected>$year</option>";
        }
        $years .= '</select>';
        return $years;
    }


    public function errors($name)
    {
        $error = !empty($this->errors[$name]) ? $this->errors[$name] : '';
        return '<br><span class="error">' . $error . '</span><br>';
    }
}
