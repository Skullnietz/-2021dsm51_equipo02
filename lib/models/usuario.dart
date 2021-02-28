class Usuario {
  int id;
  String name;
  String primerapellido;
  String segundoapellido;
  String perfil;

  Usuario(
    { this.id,
     this.name,
      this.primerapellido,
       this.segundoapellido,
        this.perfil});

  factory Usuario.fromJson(Map<String, dynamic>json){
    return Usuario(
      id: json['id'],
      name: json['name'],
      primerapellido: json['primer_apellido'],
      segundoapellido: json['segundo_apellido'],
      perfil: json['perfil'],
    );
  }
}