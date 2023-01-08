minikube stop
minikube delete
minikube start --driver=virtualbox --cpus=4 --memory=4g
eval $(minikube -p minikube docker-env)
minikube addons enable dashboard
minikube addons enable metallb
minikube addons enable metrics-server
docker pull metallb/speaker:v0.8.2
docker pull metallb/controller:v0.8.2
docker pull kubernetesui/dashboard:v2.1.0
docker pull kubernetesui/metrics-scraper:v1.0.4
docker build -t nginx_image srcs/nginx
docker build -t mysql_image srcs/mysql
docker build -t phpmyadmin_image srcs/phpmyadmin
docker build -t wordpress_image srcs/wordpress
docker build -t ftps_image srcs/ftps
docker build -t influxdb_image srcs/influxdb
docker build -t telegraf_image srcs/telegraf
docker build -t grafana_image srcs/grafana
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/configmap.yaml
kubectl apply -f srcs/mysql/mysql.yaml
kubectl apply -f srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f srcs/wordpress/wordpress.yaml
kubectl apply -f srcs/ftps/ftps.yaml
kubectl apply -f srcs/influxdb/influxdb.yaml
kubectl apply -f srcs/telegraf/telegraf.yaml
kubectl apply -f srcs/grafana/grafana.yaml
kubectl get svc
