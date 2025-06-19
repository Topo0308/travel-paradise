import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import AdminHome from './screens/Admin/Home';
import GuideHome from './screens/Guide/Home';

const Stack = createNativeStackNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName="Guide">
        <Stack.Screen name="GuideHome" component={GuideHome} />
        <Stack.Screen name="AdminHome" component={AdminHome} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}
