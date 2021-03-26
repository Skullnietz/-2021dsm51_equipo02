class Producto {
  int id;
  String producto;
  double costo;
  String img;
  int existencias;
  String categoria;
  String descripcion;



  Producto(
    { 
    this.id,
    this.producto,
    this.costo,
    this.img,
    this.categoria,
    this.existencias,
    this.descripcion,

    });

  factory Producto.fromJson(Map<String, dynamic>json){
    return Producto(
      id: json['id'],
      categoria: json['categoria'],
      existencias: json['existencias'],
      producto: json['producto'],
      costo: double.parse(json['costo']),
      descripcion: json['descripcion'],
      img: json['img'],
    );
  }

  Map<String, dynamic> toJson() {
    return {
      'id': id,
      'categoria': categoria,
      'producto': producto,
      'costo': costo,
      'existencias': existencias,
      'descripcion': descripcion,
      'img': img
    };
  }

  @override
  String toString() {
    return 'Producto{id: $id, categoria: $categoria, producto: $producto, costo: $costo, img: $img}';
  }
}