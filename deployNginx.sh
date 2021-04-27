#kubectl delete deployment nginx-deployment
#kubectl delete service nginx-loadbalancer
kubectl apply -f nginx/nginx-deployment.yaml
kubectl apply -f nginx/nginx-loadbalancer.yaml
