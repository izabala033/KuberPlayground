kubectl delete deployment nginx-deployment
kubectl delete service nginx-loadbalancer
kubectl apply -f nginx-deployment.yaml
kubectl apply -f nginx-loadbalancer.yaml
