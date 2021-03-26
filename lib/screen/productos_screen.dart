import 'dart:convert';
import 'dart:developer';
import 'package:dio/dio.dart' as Dio;
import 'package:flutter/material.dart';
import 'package:flutter_authentication_with_laravel_sanctum/models/producto.dart';
import 'package:flutter_authentication_with_laravel_sanctum/screen/producto_screen.dart';

import '../dio.dart';

class ProductosScreen extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return ProductosState();

  }
}


class ProductosState extends State<ProductosScreen> {
   Future<List<Producto>> getProductos() async {
     Dio.Response response = await dio().get('productos',
        options: Dio.Options(
            headers: {'auth': true})); //http://10.0.2.2:8000/api/user/posts
            //print(json.decode(response.toString())['data']);
    List productos = json.decode(response.toString());
  //   return posts.map((post) => Producto.fromJson(post)).toList();
  // }
        List<Producto> p =
      productos.map((producto) => Producto.fromJson(producto)).toList();
   for(int pro = 0; pro < p.length; pro++){
       print('${p[pro].id} = ${p[pro].producto} ${p[pro].img} ' );
       
     }
     return p;

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
        elevation: 0,
        backgroundColor: Colors.blue,
        leading: Icon(
          Icons.menu,
          color: Colors.black,
          //onPressed:
        ),
        
        actions: <Widget>[
          IconButton(icon: Icon(Icons.search, color:Colors.black),
           onPressed: null),
          IconButton(icon: Icon(Icons.add_shopping_cart, color:Colors.black),
           onPressed: null),
           _agregaProducto(),
          _recargarProductos(),
        ],
        title:Text('Productos'),
         ),
         body: Center(
           child: FutureBuilder<List<Producto>>(
             future: getProductos(),
             builder: (context, snapshot) {
               if (snapshot.connectionState != ConnectionState.done) {
                return CircularProgressIndicator();
              } else if (snapshot.hasData) {
                 return ListView.builder(
                   itemCount: snapshot.data.length,
                   itemBuilder: (context, index){
                     var item = snapshot.data[index];
                     print(item.toString());
                     return ListTile(
                       title:Text(item.producto),
                       subtitle:Text("\$ ${item.costo}",
                       style: const TextStyle(fontSize:18, color: Colors.black)),
                       trailing: Icon(Icons.edit),
                       leading: Container(
                         width:100,
                         height:100,
                         color: Colors.yellow,
                         child:Image.network("http://10.0.2.2:8000/Imagenes/${item.img}", fit: BoxFit.cover,),
                         
                       ), //Image.asset("assets/images/${item.img}"),
                       onTap: () {
                          // log('Agregar al carrito: ' + item.id.toString());
                          Navigator.push(
                              context,
                              MaterialPageRoute(
                                  builder: (context) =>
                                      ProductoScreen(producto: item)));
                        },
                     );
                   });

               }else if (snapshot.hasError){
                 log(snapshot.error.toString());
                 return Text('No se encontro productos');
               }

               return CircularProgressIndicator();
             }
           ),
           ),
    );
  }
   Widget _agregaProducto() {
    return TextButton(
        style: ButtonStyle(
          foregroundColor: MaterialStateProperty.all<Color>(Colors.white),
          backgroundColor: MaterialStateProperty.all<Color>(Colors.blueGrey),
          overlayColor: MaterialStateProperty.resolveWith<Color>(
            (Set<MaterialState> states) {
              if (states.contains(MaterialState.hovered))
                return Colors.blue.withOpacity(0.04);
              if (states.contains(MaterialState.focused) ||
                  states.contains(MaterialState.pressed))
                return Colors.blue.withOpacity(0.12);
              return null; // Defer to the widget's default.
            },
          ),
        ),
        onPressed: () {
          // print('agregar');
          Producto producto = Producto(
              id: 0,
              categoria: 'Dispositivo',
              costo: 0,
              existencias: 0,
              producto: '',
              descripcion: '');
          Navigator.push(
              context,
              MaterialPageRoute(
                  builder: (context) => ProductoScreen(producto: producto)));
        },
        child: Icon(Icons.add));
  }

  Widget _recargarProductos() {
    return TextButton(
        style: ButtonStyle(
          foregroundColor: MaterialStateProperty.all<Color>(Colors.white),
          backgroundColor: MaterialStateProperty.all<Color>(Colors.blueGrey),
          overlayColor: MaterialStateProperty.resolveWith<Color>(
            (Set<MaterialState> states) {
              if (states.contains(MaterialState.hovered))
                return Colors.blue.withOpacity(0.04);
              if (states.contains(MaterialState.focused) ||
                  states.contains(MaterialState.pressed))
                return Colors.blue.withOpacity(0.12);
              return null; // Defer to the widget's default.
            },
          ),
        ),
        onPressed: () {
          setState(() {});
        },
        child: Icon(Icons.refresh));
  }
}

//Necesitaremos un statefulWidget para las categorias de estudios_medicos
class Categorias extends StatefulWidget {
  @override
  _CategoriasState createState() => _CategoriasState();
  
}



class _CategoriasState extends State<Categorias> {
  List<String> categorias = ["Componentes", "Dispositivos", "Paquetes" ];
  // Por defecto Laboratorio, al abrir
  int selectedIndex = 0;
  @override
  Widget build(BuildContext context) {
    return SizedBox(
      height: 25,
      child: ListView.builder(
        scrollDirection: Axis.horizontal,
        itemCount: categorias.length,
        itemBuilder:(context, index) => Text(categorias[index],),
         ),
      
    );
  }
}