echo "Running A2Netty 500c (500 workers) Sample 1"
ab -r -n 5000000 -c 500 -s1000 -k -p payload.xml -T 'text/xml' http://204.13.85.2:8281/service > results/A2Netty/500-workers/AB-500C-1.txt
sleep 30
echo "Done"
echo "Running A2Netty 500c (500 workers) Sample 2"
ab -r -n 5000000 -c 500 -s1000 -k -p payload.xml -T 'text/xml' http://204.13.85.2:8281/service > results/A2Netty/500-workers/AB-500C-2.txt
sleep 30
echo "Done"
echo "Running A2Netty 500c (500 workers) Sample 3"
ab -r -n 5000000 -c 500 -s1000 -k -p payload.xml -T 'text/xml' http://204.13.85.2:8281/service > results/A2Netty/500-workers/AB-500C-3.txt
sleep 30
echo "Done"
