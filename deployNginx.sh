kubectl delete deployment nginx-deployment
kubectl delete service nginx-loadbalancer
kubectl create -f nginx/nginx-deployment.yaml
kubectl create -f nginx/nginx-loadbalancer.yaml
