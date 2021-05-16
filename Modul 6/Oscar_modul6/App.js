import React, {Component} from 'react';
import {
  Container, 
  Header, 
  Title, 
  Content, 
  Button, 
  Left,
  Right, 
  Body,
  Icon,
  Text,
  ListItem,
  Thumbnail,
  Input,
  Item,
} from 'native-base';
let helperArray = require('./userList.json');
export default class App extends Component {
  constructor(props){
    super(props);
    this.state = {
      allUsers: helperArray,
      usersFiltered: helperArray,
    };
  }
  //fungsi Cari
  searchUser(textToSearch){
    this.setState({
      usersFiltered: this.state.allUsers.filter(i =>
        i.name.toLowerCase().includes(textToSearch.toLowerCase()), 
      ),
    });
  }
  render() {
    return (
      <Container>
        <Text>
              Pemweb & Mobile Modul 6 : Search Filter
        </Text>
        <Text>
              Oscar Oktorian Almando
        </Text>
        <Header searchBar rounded>
          <Item>
            <Icon name='search'/>
            <Input 
              placeholder='Cari user' 
              onChangeText={text=>{
                this.searchUser(text);
                }} 
            />
          </Item>
        </Header>
        <Content>
          {this.state.usersFiltered.map((item, index) => (
            <ListItem avatar>
              <Left>
                <Thumbnail source={{url: ''}} />
              </Left>
              <Body>
                <Text> {item.name} </Text>
                <Text note> {item.username} </Text>
                <Text note> {item.email} </Text>
              </Body>
            </ListItem>
          ))}
        </Content>
      </Container>
    );
  }
}