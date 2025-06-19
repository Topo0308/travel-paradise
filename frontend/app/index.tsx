// app/index.tsx
import { View, Text } from 'react-native';
import GuideHome from './GuideHome';

export default function HomeScreen() {
  return (
    <View style={{ padding: 20 }}>
      <Text style={{ fontSize: 24, fontWeight: 'bold', marginBottom: 20 }}>Accueil Guide</Text>
      <GuideHome />
    </View>
  );
}
