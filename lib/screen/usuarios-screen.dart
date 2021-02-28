import 'dart:convert';
import 'dart:developer';
import 'package:dio/dio.dart' as Dio;
import 'package:flutter/material.dart';
import 'package:flutter_authentication_with_laravel_sanctum/models/usuario.dart';

import '../dio.dart';

class UsuariosScreen extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return UsuariosState();

  }
}


class UsuariosState extends State<UsuariosScreen> {
   Future<List<Usuario>> getUsuarios() async {
     Dio.Response response = await dio().get('usuarios',
        options: Dio.Options(
            headers: {'auth': true})); //http://10.0.2.2:8000/api/user/posts
            //print(json.decode(response.toString())['data']);
    List usuarios = json.decode(response.toString())['data'];
         List<Usuario> u =
     usuarios.map((usuario) => Usuario.fromJson(usuario)).toList();
    for(int idx = 0; idx < u.length; idx++){
       print('${u[idx].id} = ${u[idx].name} ${u[idx].primerapellido} ${u[idx].segundoapellido} ' );
       print('${u[idx].id} = ${u[idx].perfil} ' );
     }
    return u;

     /*Dio.Response response = await dio().get(
       'usuarios',
       options: Dio.Options(
         headers: {'auth': true}));
         print(response.toString());

     List usuarios = json.decode(response.toString());
     
     
     
*/
     
     //return usuarios.map((usuario) => Usuario.fromJson(usuario)).toList();
     

   }
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title:Text('Usuarios'),
         ),
         body: Center(
           child: FutureBuilder<List<Usuario>>(
             future: getUsuarios(),
             builder: (context, snapshot) {
               if(snapshot.hasData){
                 return ListView.builder(
                   itemCount: snapshot.data.length,
                   itemBuilder: (context, index){
                     
                     var item = snapshot.data[index];

                     return ListTile(
                       title:Text(item.name+' '+item.primerapellido+ ' '+item.segundoapellido),
                       subtitle:Text(item.perfil),
                       leading: CircleAvatar(
                         child: Text(item.name.substring(0,1)),
                       ),
                       trailing: Icon(Icons.arrow_forward_ios),
                     );
                   }
                   );

               }else if (snapshot.hasError){
                 log(snapshot.error.toString());
                 return Text('Failed to load Usuarios');
               }

               return CircularProgressIndicator();
             }
           ),
           ),
    );
  }
}