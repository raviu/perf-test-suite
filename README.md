# perf-test-suite
Utilities for running gateway performance tests

To set this up on perferomance server carry out the following steps:
* Host the PHP files in [html/](html/) on a PHP enabled web server like Apache. 
* Create a symbolic link to the script [results folder](scripts/results/) in the web server location in step above (this should be the same directory as the index.php file).
* Run the relevant scripts to collect Apache Benchmark reults. You may modify the AB command inside the scripts and as long as the results files are generated into the results folder structure with the same file names, the frontend graphing system should continue to work. 
 
