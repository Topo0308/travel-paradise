# Dockerfile pour l'application frontend Expo
FROM node:18

WORKDIR /app

COPY package.json package-lock.json* ./

# Installer les dépendances principales
RUN npm install --legacy-peer-deps

# Installer les types si TypeScript est utilisé
RUN npm install --save-dev @types/react @types/react-native typescript

COPY . .

EXPOSE 19000

CMD ["npx", "expo", "start", "--tunnel"]
