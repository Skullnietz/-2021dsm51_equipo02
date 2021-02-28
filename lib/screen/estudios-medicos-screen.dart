import 'dart:convert';
import 'dart:developer';
import 'package:dio/dio.dart' as Dio;
import 'package:flutter/material.dart';
import 'package:flutter_authentication_with_laravel_sanctum/models/estudio_medico.dart';

import '../dio.dart';

class EstudiosScreen extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return EstudiosState();

  }
}


class EstudiosState extends State<EstudiosScreen> {
   Future<List<Estudio>> getEstudios() async {
     Dio.Response response = await dio().get('estudios_medicos',
        options: Dio.Options(
            headers: {'auth': true})); //http://10.0.2.2:8000/api/user/posts
            //print(json.decode(response.toString())['data']);
    List estudios = json.decode(response.toString())['data'];
         List<Estudio> e =
     estudios.map((estudio) => Estudio.fromJson(estudio)).toList();
   for(int est = 0; est < e.length; est++){
       print('${e[est].id} = ${e[est].estudio} ${e[est].costo} ' );
       
     }
    return e;

     /*Dio.Response response = await dio().get(
       'estudios',
       options: Dio.Options(
         headers: {'auth': true}));
         print(response.toString());

     List estudios = json.decode(response.toString());
     
     
     
*/
     
     //return estudios.map((estudio) => estudio.fromJson(estudio)).toList();
     

   }
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title:Text('Estudios Medicos'),
         ),
         body: Center(
           child: FutureBuilder<List<Estudio>>(
             future: getEstudios(),
             builder: (context, snapshot) {
               if(snapshot.hasData){
                 return ListView.builder(
                   itemCount: snapshot.data.length,
                   itemBuilder: (context, index){
                     
                     var item = snapshot.data[index];

                     return ListTile(
                       title:Text(item.estudio),
                       subtitle:Text(item.costo),
                       trailing: Icon(Icons.arrow_forward_ios),
                     );
                   }
                   );

               }else if (snapshot.hasError){
                 log(snapshot.error.toString());
                 return Text('Failed to load estudios');
               }

               return CircularProgressIndicator();
             }
           ),
           ),
    );
  }
}