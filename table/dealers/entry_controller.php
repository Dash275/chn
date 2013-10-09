<?php include_once "./dealers_model.php";

function initialize ()
{
     if ($_SERVER['REQUEST_METHOD'] == 'POST')
     {
          if ($_POST['email'] == "")
          {
               $_POST['email'] = "None Provided";
          }
          if ($_POST['split'] == "")
          {
               if (isset($_POST['type']))
               {
                    $_POST['split'] = split_find($_POST['type']);
                    if ($_POST['split'] == null)
                    {
                         $_POST['split'] = .5;
                    }
               }
          }
          if ($_POST['initials'] != "" and
              $_POST['id'] != "" and
              $_POST['type'] != "" and
              $_POST['fname'] != "" and
              $_POST['lname'] != "" and
              $_POST['street'] != "" and
              $_POST['city'] != "" and
              $_POST['state'] != "" and
              $_POST['phone'] != "")
          {
               new_dealer($_POST['initials'], $_POST['id'],
                          $_POST['type'], $_POST['fname'],
                          $_POST['lname'], $_POST['street'],
                          $_POST['city'], $_POST['state'],
                          $_POST['phone'], $_POST['email'],
                          $_POST['split']);
          }
     }
}

?>