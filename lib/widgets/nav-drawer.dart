import 'package:flutter/material.dart';
import 'package:flutter_authentication_with_laravel_sanctum/providers/auth.dart';
import 'package:flutter_authentication_with_laravel_sanctum/screen/login-screen.dart';
import 'package:flutter_authentication_with_laravel_sanctum/screen/usuarios-screen.dart';
import 'package:flutter_authentication_with_laravel_sanctum/screen/estudios-medicos-screen.dart';
import 'package:provider/provider.dart';
class HomeScreen extends StatefulWidget {
  @override
  _HomeScreenState createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  @override
  Widget build(BuildContext context) {
    return  Drawer(
        child: Consumer<Auth>(
          builder:(context, auth, child){
            if(auth.authenticated){
              return ListView(
          children: <Widget> [
            UserAccountsDrawerHeader(
              accountName: Text(auth.user.name),
              accountEmail: Text(auth.user.email),
              currentAccountPicture: CircleAvatar(
                         child: Text(auth.user.name.substring(0,1),style: TextStyle(fontSize: 40.0),
                       ), ),
            ),
                         
            ListTile(
              trailing: Icon(
                 Icons.arrow_forward_ios,
                ),
                leading: CircleAvatar(
                         child: Text(auth.user.name.substring(0,1)),
                       ),
              // Icon(Icons.call),
              title: Text(auth.user.name),
              
            ),
            ListTile(
              leading: Icon(
                Icons.supervised_user_circle,
              ),
              title: Text('Usuarios'),
              onTap: (){
                Navigator.push(context, MaterialPageRoute(builder:(context)=>UsuariosScreen()));
              },
            ),
            ListTile(
              leading: Icon(
                Icons.medical_services ,
              ),
              title: Text('Estudios Medicos'),
              onTap: (){
                Navigator.push(context, MaterialPageRoute(builder:(context)=>EstudiosScreen()));
              },
            ),
            ListTile(
              leading: Icon(
                Icons.logout ,
              ),
                      title: Text('Cerrar sesion'),
                          onTap: (){
                            Provider.of<Auth>(context,listen: false).logout();
                          },
                         ),
          ],
        );
            }else{
              return ListView(
                children: [
                  ListTile(
                    leading: Icon(
                Icons.logout ,
              ),
                      title: Text('Login'),
                       onTap: (){
                         Navigator.push(context, MaterialPageRoute(builder:(context)=>LoginScreen()));
                         },
                         ),
                         ListTile(
                           leading: Icon(
                Icons.app_registration  ,
              ),
                      title: Text('Register'),
                       onTap: (){
                         Navigator.push(context, MaterialPageRoute(builder:(context)=>LoginScreen()));
                         },
                         ),
                ],
              );
            }
          },
      ),
    );
  }
}