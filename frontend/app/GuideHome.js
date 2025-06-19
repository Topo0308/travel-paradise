// screens/guide/GuideHome.js
import React, { useEffect, useState } from 'react';
import { View, Text, FlatList, Button } from 'react-native';

export default function GuideHome() {
  const [visites, setVisites] = useState([]);

  useEffect(() => {
    fetch('http://localhost:8000/api/visites')
      .then(res => res.json())
      .then(setVisites)
      .catch(err => console.error('Erreur fetch visites:', err));
  }, []);

  return (
    <FlatList
      data={visites}
      keyExtractor={(item) => item.id.toString()}
      renderItem={({ item }) => (
        <View style={{ padding: 10, marginBottom: 10, backgroundColor: '#eee' }}>
          <Text style={{ fontWeight: 'bold' }}>{item.lieu}</Text>
          <Text>{item.debut} - {item.fin}</Text>
          <Button title="Clôturer" onPress={() => {/* logique à venir */}} />
        </View>
      )}
    />
  );
}
