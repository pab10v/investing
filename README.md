# investing
Basic API to extract data from widgets of investing.com

# instalation

Just copy the files and point to

Changue the endpoints in config.php for rates, single or other available in <b>investing.com</b>


$url['single'] = "https://mx.widgets.investing.com/single-currency-crosses?cols=$cols&currency=$currency";
$url['rates'] = "https://mx.widgets.investing.com/live-currency-cross-rates?cols=$cols&pairs=$pairs";


https://your_site/api_folder/index.php?a=rates 
https://your_site/api_folder/index.php?a=single 

I added only two by now.


