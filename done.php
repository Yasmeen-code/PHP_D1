
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [];

            foreach ($_POST as $key => $value) {

                if (is_array($value)) {
                    $value = implode(': ', $value);
                }
                $data[] = "$value";
            }

            file_put_contents('data.txt', implode(', ', $data) . "\n", FILE_APPEND);
        }

        ?>
   