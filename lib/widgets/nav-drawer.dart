import 'package:flutter/material.dart';
import 'package:flutter_authentication_with_laravel_sanctum/screen/login-screen.dart';
import 'package:flutter_authentication_with_laravel_sanctum/screen/posts-screen.dart';
class HomeScreen extends StatefulWidget {
  @override
  _HomeScreenState createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Sanctum Authentication'),
      ),
      body:Center(child: Text('You are not logged in'),),
      drawer: Drawer(
        child: ListView(
          children: [
            ListTile(
              title: Text('Guizar Peña Carlos Enrique DSM51'),
              
            ),
            ListTile(
              title: Text('Posts'),
              onTap: (){
                Navigator.push(context, MaterialPageRoute(builder:(context)=>PostsScreen()));
              },
            ),
            ListTile(
              title: Text('Login'),
              onTap: (){
                Navigator.push(context, MaterialPageRoute(builder:(context)=>LoginScreen()));
              },
            ),
          ],
        ),
      ),
    );
  }
}