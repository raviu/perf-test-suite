echo "Running DB 100c (500 workers) Sample 1"
ab -r -n 5000000 -c 100 -s1000 -k -p payload.xml -T 'text/xml' http://204.13.85.5:5050/service > results/DB/500-workers/AB-100C-1.txt
sleep 30
echo "Done"
echo "Running DB 100c (500 workers) Sample 2"
ab -r -n 5000000 -c 100 -s1000 -k -p payload.xml -T 'text/xml' http://204.13.85.5:5050/service > results/DB/500-workers/AB-100C-2.txt
sleep 30
echo "Done"
echo "Running DB 100c (500 workers) Sample 3"
ab -r -n 5000000 -c 100 -s1000 -k -p payload.xml -T 'text/xml' http://204.13.85.5:5050/service > results/DB/500-workers/AB-100C-3.txt
sleep 30
echo "Done"
