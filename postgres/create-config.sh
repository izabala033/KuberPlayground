kubectl create secret generic postgres-secret \
--from-literal=POSTGRES_USER="postgres" \
--from-literal=POSTGRES_PASSWORD="securepassword123"
kubectl apply -f configmap.yaml
kubectl apply -f postgres-service.yaml
