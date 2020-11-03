FROM nginx:1.13.10-alpine

WORKDIR /app

COPY docker/nginx/default.conf /etc/nginx/conf.d/dimas.conf

# Define default command.
CMD ["nginx", "-g", "daemon off;"]

# Expose ports.
EXPOSE 80
EXPOSE 443

