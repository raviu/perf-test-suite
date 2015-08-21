echo "Running 100c A2Netty 500 Workers"
ab -r -n 5000000 -c 100 -s1000 -k -p payload.xml -T 'text/xml' http://localhost:5050/service > results/A2Netty/500-workers/AB-100C-1.txt
sleep 30
ab -r -n 5000000 -c 100 -s1000 -k -p payload.xml -T 'text/xml' http://localhost:5050/service > results/A2Netty/500-workers/AB-100C-2.txt
sleep 30
ab -r -n 5000000 -c 100 -s1000 -k -p payload.xml -T 'text/xml' http://localhost:5050/service > results/A2Netty/500-workers/AB-100C-3.txt
sleep 30
ab -r -n 5000000 -c 100 -s1000 -k -p payload.xml -T 'text/xml' http://localhost:5050/service > results/A2Netty/500-workers/AB-100C-3.txt
