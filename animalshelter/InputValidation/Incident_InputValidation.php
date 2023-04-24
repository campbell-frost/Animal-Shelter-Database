<?php

    function Validate()
    {
        $errors = array();

        //regularExpressions();

        // Define regular expressions to match against user input
        $alpha_numeric = "/^[a-zA-Z0-9]+$/";
        $alpha = "/^[a-zA-Z]+$/";
        $numeric = "/^[0-9]+$/";
        $phone = "/^[0-9]{10}$/";

        // Validate the 'BadgeNumber' field
        if(!isset($_POST['badgeNumber']) || empty($_POST['badgeNumber']))
        {
            $errors[] = "badgeNumber is required!";
        }
        else if(!preg_match($numeric, $_POST["badgeNumber"]))
        {
            $errors[] = "badgeNumber should only contain numerical values!";
        }
        
        // Validate the 'IncidentID' field
        if(!isset($_POST['incidentID']) || empty($_POST['incidentID']))
        {
            $errors[] = "incidentID is required!";
        }
        else if(!preg_match($numeric, $_POST["incidentID"]))
        {
            $errors[] = "incidentID should only contain numerical values!";
        }

        // Validate the 'Date' field
        if(!isset($_POST['date']) || empty($_POST['date']))
        {
            $errors[] = "date is required!";
        }

        // Validate the 'Time' field
        if(!isset($_POST['time']) || empty($_POST['time']))
        {
            $errors[] = "time is required!";
        }

        // Validate the 'Weather' field
        if(!isset($_POST['weather']) || empty($_POST['weather']))
        {
            $errors[] = "weather is required!";
        }
        else if(!preg_match($alpha, $_POST['weather']))

        // Description validation?

        // Validate the 'sex' field
        if(!isset($_POST['sex']) || empty($_POST['sex']))
        {
            $errors[] = "sex is required";
        }

        // Validate the 'color' field
        if(!isset($_POST['color']) || empty($_POST['color']))
        {
            $errors[] = "color is required";
        }
        else if(!preg_match($alpha, $_POST['color']))
        {
            $errors[] = "color should contain only alphabetical characters";
        }

        // Validate the 'type' field
        if(!isset($_POST['type']) || empty($_POST['type']))
        {
            $errors[] = "type is required";
        }

        // Validate the 'Phone' field
        if(!isset($_POST['phone']) || empty($_POST['phone']))
        {
            $errors[] = "phone Number is required!";
        }
        else if(!preg_match($numeric, $_POST['phone']))
        {
            $errors[] = "phone Number should contain only numerical values!";
        }

        // Validate the 'Address' field
        if(!isset($_POST['address']) || empty($_POST['address']))
        {
            $errors[] = "address is required!";
        }
        else if(!preg_match($alpha_numeric, $_POST['address']))
        {
            $errors[] = "Address should contain only alphabetical characters and numerical values!";
        }

        // Validate the 'City' field
        if(!isset($_POST['city']) || empty($_POST['city']))
        {
            $errors[] = "city is required!";
        }
        else if(!preg_match($alpha, $_POST['city']))
        {
            $errors[] = "city should contain only alphabetical characters!";
        }

        // Validate the 'State' field
        if(!isset($_POST['state']) || empty($_POST['state']))
        {
            $errors[] = "state is required!";
        }
        else if(!preg_match($alpha, $_POST['state']))
        {
            $errors[] = "state should contain only alphabetical characters!";
        }

        // Validate the 'Zipcode' field
        if(!isset($_POST['zipcode']) || empty($_POST['zipcode']))
        {
            $errors[] = "zipcode is required!";
        }
        else if(!preg_match($numeric, $_POST['zipcode']))
        {
            $errors[] = "zipcode should contain only numerical values!";
        }
    }
?>