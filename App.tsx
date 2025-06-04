import { StatusBar } from 'expo-status-bar';
import {
  StyleSheet,
  Text,
  View,
  Modal,
  TouchableOpacity,
  Animated,
  Platform,
} from 'react-native';
import { useState, useRef, useEffect } from 'react';

export default function App() {
  const [modalVisible, setModalVisible] = useState(false);
  const [modalCompaVisible, setModalCompaVisible] = useState(false);
  const [contador, setContador] = useState(0);
  const fadeAnim = useRef(new Animated.Value(0)).current;

  const mostrarModal = () => setModalVisible(true);
  const aumentarContador = () => setContador(contador + 1);

  useEffect(() => {
    if (modalVisible) {
      Animated.timing(fadeAnim, {
        toValue: 1,
        duration: 500,
        useNativeDriver: true,
      }).start();
    } else {
      fadeAnim.setValue(0);
    }
  }, [modalVisible]);

  return (
    <View style={styles.container}>
      <Text style={styles.title}>¡Bienvenido!</Text>

      <View style={styles.buttonGroup}>
        <TouchableOpacity style={styles.blueButton} onPress={mostrarModal}>
          <Text style={styles.buttonText}>Saludar</Text>
        </TouchableOpacity>

        <TouchableOpacity style={styles.grayButton} onPress={() => setModalCompaVisible(true)}>
          <Text style={styles.buttonText}>Touch Here</Text>
        </TouchableOpacity>

        <TouchableOpacity style={styles.purpleButton} onPress={aumentarContador}>
          <Text style={styles.buttonText}>Presionado: {contador}</Text>
        </TouchableOpacity>
      </View>

      {/* Modal 1 */}
      <Modal
        animationType="fade"
        transparent
        visible={modalVisible}
        onRequestClose={() => setModalVisible(false)}
      >
        <View style={styles.modalContainer}>
          <Animated.View style={[styles.modalContent, { opacity: fadeAnim }]}>
            <Text style={styles.modalText}>Hola Mundo, Soy Programador</Text>
            <TouchableOpacity style={styles.closeButton} onPress={() => setModalVisible(false)}>
              <Text style={styles.closeText}>Cerrar</Text>
            </TouchableOpacity>
          </Animated.View>
        </View>
      </Modal>

      {/* Modal 2 */}
      <Modal
        animationType="fade"
        transparent
        visible={modalCompaVisible}
        onRequestClose={() => setModalCompaVisible(false)}
      >
        <View style={styles.modalContainer}>
          <View style={styles.modalContent}>
            <Text style={styles.modalText}>Hola compañeros</Text>
            <TouchableOpacity style={styles.closeButton} onPress={() => setModalCompaVisible(false)}>
              <Text style={styles.closeText}>Cerrar</Text>
            </TouchableOpacity>
          </View>
        </View>
      </Modal>

      <StatusBar style="auto" />
    </View>
  );
}

const baseShadow = {
  ...Platform.select({
    ios: {
      shadowColor: '#000',
      shadowOffset: { width: 0, height: 2 },
      shadowOpacity: 0.2,
      shadowRadius: 3,
    },
    android: {
      elevation: 5,
    },
  }),
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
  title: {
    fontSize: 20,
    marginBottom: 20,
    fontWeight: 'bold',
  },
  buttonGroup: {
    alignItems: 'center',
    gap: 10,
  },
  blueButton: {
    width: 200,
    height: 40,
    backgroundColor: '#2196F3',
    borderRadius: 10,
    justifyContent: 'center',
    alignItems: 'center',
    ...baseShadow,
  },
  grayButton: {
    width: 200,
    height: 40,
    backgroundColor: '#ccc',
    borderRadius: 10,
    justifyContent: 'center',
    alignItems: 'center',
    ...baseShadow,
  },
  purpleButton: {
    width: 200,
    height: 40,
    backgroundColor: '#9b59b6',
    borderRadius: 10,
    justifyContent: 'center',
    alignItems: 'center',
    ...baseShadow,
  },
  buttonText: {
    fontSize: 16,
    color: 'white',
    fontWeight: 'bold',
  },
  modalContainer: {
    flex: 1,
    backgroundColor: 'rgba(0,0,0,0.4)',
    justifyContent: 'center',
    alignItems: 'center',
  },
  modalContent: {
    backgroundColor: '#fff',
    padding: 30,
    borderRadius: 20,
    alignItems: 'center',
    ...baseShadow,
  },
  modalText: {
    fontSize: 18,
    marginBottom: 20,
    color: 'black',
  },
  closeButton: {
    backgroundColor: '#2196F3',
    paddingHorizontal: 20,
    paddingVertical: 10,
    borderRadius: 10,
  },
  closeText: {
    color: 'white',
    fontWeight: 'bold',
  },
});
