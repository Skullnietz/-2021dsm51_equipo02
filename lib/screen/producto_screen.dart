import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:dio/dio.dart' as Dio;

import '../dio.dart';
import '../models/producto.dart';

class ProductoScreen extends StatefulWidget {
  final Producto producto;

  ProductoScreen({Key key, this.producto}) : super(key: key);

  @override
  _ProductoScreenState createState() => _ProductoScreenState();
}

class _ProductoScreenState extends State<ProductoScreen> {
  final _formKey = GlobalKey<FormState>();
  final List<String> _categorias = [
    'Componente',
    'Dispositivo',
    'Paquete',
  ];



  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
          title: Text(
              (widget.producto.id <= 0 ? 'Crear ' : 'Editar ') + 'producto')),
      body: Form(
          key: _formKey,
          child: ListView(
            padding: EdgeInsets.symmetric(horizontal: 10.0, vertical: 20.0),
            children: <Widget>[
              _listaCategoria(),
              Divider(),
              _inputProducto(),
              Divider(),
              _inputCosto(),
              Divider(),
              _inputExistencias(),
              Divider(),
              _inputDescripcion(),
              Divider(),
              _boton()
            ],
          )),
    );
  }

  List<DropdownMenuItem<String>> _getOpcionesCategoria() {
    List<DropdownMenuItem<String>> lista = List();
    _categorias.forEach((categoria) {
      lista.add(DropdownMenuItem(child: Text(categoria), value: categoria));
    });
    return lista;
  }



  Widget _listaCategoria() {
    return DropdownButtonFormField(
      value: widget.producto.categoria, //la opción seleccionada inicialmente
      items: _getOpcionesCategoria(),
      decoration: InputDecoration(
          border: OutlineInputBorder(borderRadius: BorderRadius.circular(20.0)),
          hintText: 'Categoría',
          labelText: 'Categoría',
          helperText: 'Categoría',
          suffixIcon: Icon(Icons.keyboard),
          icon: Icon(Icons.keyboard)),
      onChanged: (value) {
        widget.producto.categoria = value;
        print(value);
      },
    );
  }

 

  Widget _inputProducto() {
    return TextFormField(
      // autofocus: true,
      initialValue: widget.producto.producto,
      decoration: InputDecoration(
          border: OutlineInputBorder(borderRadius: BorderRadius.circular(20.0)),
          hintText: 'Producto',
          labelText: 'Producto',
          helperText: 'Producto',
          suffixIcon: Icon(Icons.keyboard),
          icon: Icon(Icons.keyboard)),
      onSaved: (value) {
        widget.producto.producto = value;
      },
    );
  }

  Widget _inputCosto() {
    return TextFormField(
      keyboardType: TextInputType.number,
      // autofocus: true,
      initialValue: widget.producto.costo.toString(),
      decoration: InputDecoration(
          border: OutlineInputBorder(borderRadius: BorderRadius.circular(20.0)),
          hintText: 'Costo',
          labelText: 'Costo',
          helperText: 'Costo',
          suffixIcon: Icon(Icons.keyboard),
          icon: Icon(Icons.keyboard)),
      onSaved: (value) {
        widget.producto.costo = double.parse(value);
      },
    );
  }

  Widget _inputExistencias() {
    return TextFormField(
      keyboardType: TextInputType.number,
      // autofocus: true,
      initialValue: widget.producto.existencias.toString(),
      decoration: InputDecoration(
          border: OutlineInputBorder(borderRadius: BorderRadius.circular(20.0)),
          hintText: 'Existencias',
          labelText: 'Existencias',
          helperText: 'Existencias',
          suffixIcon: Icon(Icons.keyboard),
          icon: Icon(Icons.keyboard)),
      onSaved: (value) {
        widget.producto.existencias = int.parse(value);
      },
    );
  }

  Widget _inputDescripcion() {
    return TextFormField(
      initialValue: widget.producto.descripcion,
      decoration: InputDecoration(
          border: OutlineInputBorder(borderRadius: BorderRadius.circular(20.0)),
          hintText: 'Descripción',
          labelText: 'Descripción',
          helperText: 'Descripción',
          suffixIcon: Icon(Icons.keyboard),
          icon: Icon(Icons.keyboard)),
      onSaved: (value) {
        widget.producto.descripcion = value;
      },
    );
  }

  Widget _boton() {
    return SizedBox(
      width: double.infinity,
      child: TextButton(
        child: Text('Guardar'),
        onPressed: () {
          _formKey.currentState.save();
          _submit();
        },
      ),
    );
  }

  void _alerta(BuildContext context, String titulo, String mensaje) {
    showDialog(
        context: context,
        builder: (context) {
          return AlertDialog(
            shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(20.0)),
            title: Text(titulo),
            content: Column(
              mainAxisSize: MainAxisSize.min,
              children: <Widget>[
                Text(mensaje),
                // FlutterLogo(size: 100.0),
              ],
            ),
            actions: <Widget>[
              TextButton(
                child: Text('Aceptar'),
                onPressed: () {
                  Navigator.of(context).pop();
                },
              )
            ],
          );
        });
  }

  void _submit() async {
    if (0 >= widget.producto.id) {
      //crear, no existe
      Dio.Response response = await dio().post('productos',
          data: json.encode(widget.producto.toJson()),
          options: Dio.Options(headers: {'auth': true}));
      if (200 == response.statusCode) {
        _alerta(context, 'Producto', 'Producto creado');
      }
    } else {
      //actualizar
      print(widget.producto.toJson());
      print('productos/' + widget.producto.id.toString());
      Dio.Response response = await dio().put(
          'productos/' + widget.producto.id.toString(),
          data: json.encode(widget.producto.toJson()),
          options: Dio.Options(headers: {'auth': true}));
      if (200 == response.statusCode) {
        _alerta(context, 'Producto', 'Producto actualizado');
      }
    }

    // Navigator.pop(context); //regresar a pantalla previa
    // return true;
  }
}
