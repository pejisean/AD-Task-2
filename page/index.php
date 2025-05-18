<?php
    require BASE_PATH . '/vendor/autoload.php';

    require_once BASE_PATH . '/components/templates/foot.component.php';
    require_once BASE_PATH . '/components/templates/head.component.php';
?>

<?php
    head("Landing Page");
?>
<body>
    <div class="rain front-row pointer-events-none">
    </div>
    <a href="../index.php" class="fixed top-0 left-[-30] ml-2 mt-2 bg-slate-400 hover:bg-slate-500 font-bold py-2 px-2 inline-block text-center rounded fade-in">
            Return Home
    </a>
    <div class="min-h-screen flex items-center justify-center">
         <h1 class="fixed top-0 font-extrabold w-full text-center text-[50px] text-white leading-tight p-4 pointer-events-none fade-in">
            Here's the upcoming weather for the week!
        </h1>
        <div class="grid grid-cols-5 gap-6 p-8 justify-center">
            <?php
                //Weather Forecast Logic
                $weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
                $temperatures = array();
                for($i=0;$i<7;$i++){
                    $temperatures[$i] = rand(-10, 40);
                }

                for($i = 0;$i< count($weekdays);$i++){
                    echo '<div class="bg-white bg-opacity-80 rounded-lg shadow p-6 text-center fade-in">';
                        echo '<div class="font-bold text-xl mb-2">'.$weekdays[$i].'</div>';
                        echo '<div class="text-4xl font-extrabold mb-2">'.$temperatures[$i].'°C</div>';
                        if($temperatures[$i] < 0){
                            //freezing
                            echo '❄️🥶';
                        }elseif ($temperatures[$i] >= 0 && $temperatures[$i] < 10) {
                            // Cold
                            echo '🧥🌬️';
                        } elseif ($temperatures[$i] >= 10 && $temperatures[$i] < 20) {
                            // Cool
                            echo '🌤️🙂';
                        } elseif ($temperatures[$i] >= 20 && $temperatures[$i] < 25) {
                            // Mild/Comfortable
                            echo '☀️😌';
                        } elseif ($temperatures[$i] >= 25 && $temperatures[$i] < 30) {
                            // Warm
                            echo '😎🔥';
                        } else {
                            // Hot (30°C and above)
                            echo '🥵🔥☀️';
                        }
                    echo '</div>';

                }

            ?>
        </div>
    </div>

    <!--Javascript-->
    <script src="./assets/js/example.js"></script>
</body>
<?php
    footer();
?>