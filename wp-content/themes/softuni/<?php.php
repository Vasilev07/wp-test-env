<?php

// HereDoc
// 'HereDoc'

// echo 'A' . 'B' . 'C' // concat is slower than
// echo 'A' , 'B' , 'C' -->

class MyView {

    public static function displayForm() {
        return <<<displayForm
            <form>
                <input />
            </form>
    displayForm; 

        }
    }
?>

<?php

require_once "includes/MyView.php";

forEach()
echo MyView::displayForm()
