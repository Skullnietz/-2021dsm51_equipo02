import 'package:flutter/material.dart';
class HomeScreen extends StatefulWidget {
  @override
  _HomeScreenState createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Flutter Laravel Auth'),
      ),
      body:Center(child: Text('Home Screen'),),
      drawer: Drawer(
        child: ListView(
          children: [
            ListTile(
              title: Text('Login'),
              leading: Icon(Icons.login),
            )
          ],
        ),
      ),
    );
  }
}