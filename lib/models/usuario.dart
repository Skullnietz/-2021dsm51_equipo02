class Usuario {
  int id;
  String nombre;
  String primerapellido;
  String segundoapellido;
  String perfil;
  String fechanacimiento;
  String sexo;

  Usuario({ 
       this.id,
       this.nombre,
       this.primerapellido,
       this.segundoapellido,
       this.perfil,
       this.fechanacimiento,
       this.sexo,
        
        });

        Map<String, dynamic> toJson() {
    return {
      'id': id,
      'name': nombre,
      'primer_apellido': primerapellido,
      'segundo_apellido': segundoapellido,
      'perfil': perfil,
      // 'fecha_nacimiento': fechanacimiento,
      'fecha_nacimiento': fechanacimiento,
      'sexo': sexo
    };
  }

  factory Usuario.fromJson(Map<String, dynamic>json){
    return Usuario(
      id: json['id'],
      nombre: json['name'],
      primerapellido: json['primer_apellido'],
      segundoapellido: json['segundo_apellido'],
      perfil: json['perfil'],
      fechanacimiento: json['fecha_nacimiento'],
      sexo: json['sexo'],
    );
  }
}