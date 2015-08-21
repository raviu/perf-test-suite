echo "Running GW 1000c (500 workers) Sample 1"
ab -r -n 5000000 -c 1000 -s1000 -k -p payload.xml -T 'text/xml' -H"routeId: r1" http://204.13.85.2:9090/service > results/GW/500-workers/AB-1000C-1.txt
sleep 30
echo "Done"
echo "Running GW 1000c (500 workers) Sample 2"
ab -r -n 5000000 -c 1000 -s1000 -k -p payload.xml -T 'text/xml' -H"routeId: r1" http://204.13.85.2:9090/service > results/GW/500-workers/AB-1000C-2.txt
sleep 30
echo "Done"
echo "Running GW 1000c (500 workers) Sample 3"
ab -r -n 5000000 -c 1000 -s1000 -k -p payload.xml -T 'text/xml' -H"routeId: r1" http://204.13.85.2:9090/service > results/GW/500-workers/AB-1000C-3.txt
sleep 30
echo "Done"
