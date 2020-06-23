import React from 'react';
import { ActivityIndicator, StyleSheet, Text, View } from "react-native";


const Displaylove = (prop)=>{
    if(prop.data==="loading") {
        return <View style={styles.text}>
                  <ActivityIndicator size="large" color="#0000ff" />
               </View>
    }
    if(prop.data.message) {
        return <Text style={styles.text}>Something went wrong, Calculate again</Text>
    }
    return (
        <View style={styles.container}>
            <Text style={styles.text} >{prop.data.percentage}</Text>
            <Text style={styles.text}>{prop.data.result}</Text>
        </View>
    )
}

export default Displaylove

const styles = StyleSheet.create({
    container: {
      flex:1,
      backgroundColor:'#fff',
    },
    text: {
        fontSize:30,
        textAlign:"center"
    }
  })