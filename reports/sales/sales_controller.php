<?php // include_once "../../application/model.php" ?>
<?php include_once 'sales_model.php' ?>

<?php
function initialize()
    {
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
        return false;
        }
    else if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        if ($_POST['dealer'] and $_POST['month'])
            {
            $value['dealer'] = $_POST['dealer'];
            $value['month'] = $_POST['month'];
            $value['results'] = sales_by_dealer($value['dealer'],
                $value['month']);
            $value['info'] = dealer_call($value['dealer']);
            $value['info'] = $value['info']->fetch_array(MYSQLI_ASSOC);
            return $value;
            }
        }
    }
?>
