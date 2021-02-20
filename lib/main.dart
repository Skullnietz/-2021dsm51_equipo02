import 'package:flutter/material.dart';
import 'package:flutter/rendering.dart';
import 'package:flutter_authentication_with_laravel_sanctum/providers/auth.dart';
import 'package:flutter_authentication_with_laravel_sanctum/widgets/nav-drawer.dart';
import 'package:provider/provider.dart';

void main() {
  runApp(
    ChangeNotifierProvider(
      create: (_) => Auth(),
      child: MyApp(),
    )
  );
}

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      theme: ThemeData(
        primarySwatch: Colors.blue,
        visualDensity: VisualDensity.adaptivePlatformDensity,
      ),
      home: MyHomePage(title: 'Sanctum authentication'),
    );
  }
}

class MyHomePage extends StatefulWidget{
  MyHomePage({Key key, this.title}) : super(key: key);
  

  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();

}

class _MyHomePageState extends State<MyHomePage>{
  List<User> _users=[ 
    User("Jose","Galdamez","Perez","Medico"),
    User("Carlos","Guizar","Peña","Administrador"),
    User("Jairo","Padilla","Nava", "Laboratorista"),
    User("Aurora","Gonzales","Hernandez","Paciente")
  ];


  @override
  Widget build(BuildContext context){
    return Scaffold(
      appBar:AppBar(
        title:Text(widget.title),
        
      ),
      drawer: HomeScreen(),
      body: Center(
        child: Consumer<Auth>(
          builder: (context, auth, child){
            if (auth.authenticated){
              return ListView.builder(
        itemCount: _users.length,
        itemBuilder: (context,index){
          return ListTile(
            onLongPress:(){
              this._borrarUser(context,_users[index]);
            },
            title:Text(_users[index].name+' '+_users[index].segundo_apellido +' '+_users[index].primer_apellido),
            subtitle:Text(_users[index].perfil),
            leading: CircleAvatar(
              child: Text(_users[index].name.substring(0,1)),
            ),
            trailing: Icon(Icons.arrow_forward_ios),
          );

        }
      );

              
            }else{
              return Text('You are not logged in');

            }
          }
        )
      ),
    );
  }
  _borrarUser(context, User user){
    showDialog(
      context: context,
      builder: ( _ ) => AlertDialog(
        title: Text("Eliminar registro"),
        content: Text("¿Esta seguro de querer eliminar a "+ user.name + '?'),
        actions: [
          FlatButton(onPressed:(){
            Navigator.pop(context);
          },child: Text("Cancelar")),
          FlatButton(onPressed: (){
            print(user.name);
            this.setState(() {
              this._users.remove(user);
            });
            
            Navigator.pop(context);
          },child:Text("Borrar", style: TextStyle(color: Colors.red),)),
        ],
      )
      );
  }
}

class User{
  String name;
  String primer_apellido;
  String segundo_apellido;
  String perfil;
  

  User(name, primer_apellido, segundo_apellido, perfil){
    this.name = name;
    this.primer_apellido= primer_apellido;
    this.segundo_apellido = segundo_apellido;
    this.perfil = perfil;
  }
}