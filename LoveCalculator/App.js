/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 * @flow strict-local
 */

import React from 'react';
import {StyleSheet, Text, View} from 'react-native';
import { TextInput, Appbar, Button } from 'react-native-paper';
import Displaylove from './components/Displaylove'


class App extends React.Component {
  state = {
    fname:'',
    sname:'',
    data:'loading'
  }

  checkInputFields(e) {
    this.setState({fname:e})
    this.setState({sname:e})
  }

submited() {
  if(this.state.fname.length<1 && this.state.sname.length<1) {
    alert('Please fill the both fields then click to calculate button')
  }
  else {
    fetch(`https://love-calculator.p.rapidapi.com/getPercentage?fname=${this.state.fname}&sname=${this.state.sname}`, {
      headers:{
        "x-rapidapi-host": "love-calculator.p.rapidapi.com",
        "x-rapidapi-key": "8bc3257f85msh3979aef9f25d18dp11a8dbjsn31f9ac46c4e6"
      }
    })
    .then(data=>data.json())
    .then(data2 => {
  this.setState({
    data:data2
  })
      
    })
  }

}
  render() {
    return (
      <View>
        <Appbar.Header>
        <Appbar.Content
          title="Love % Calculator"
          style={{alignItems:"center"}}
        />
      </Appbar.Header>
        <TextInput
        label='Person1(male)'
        value={this.state.fname}
        onChangeText={text => this.setState({ fname:text })}
        style={{marginTop:10}}
    />
       <TextInput
        label='Person2(female)'
        value={this.state.sname}
        onChangeText={text => this.setState({ sname:text })}
        style={{marginTop:10}}
      />
       <Button 
       icon="heart"
        mode="contained" 
        onPress={this.submited.bind(this)}
        style={{margin:15}}>
          Calculate
       </Button>
       <Displaylove data={this.state.data}/>
      </View>
    );
  }
}

export default App;

const styles = StyleSheet.create({
  container: {
    flex:1,
    backgroundColor:'#fff'
  }
})