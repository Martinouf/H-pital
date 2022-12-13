@startuml
scale 2
left to right direction 
skinparam packageStyle rect 
actor hopital as h
actor personnel as p 
rectangle tablette {
    h -- (tablette)
    p -- (tablette)
    (tablette).> (informer): include 
    (aider).> (tablette): extend
}
@enduml

@startuml
scale 2
left to right direction 
skinparam packageStyle rect 
actor secretaire as s
rectangle ordinateur-secrétariat {
    s -- (prendre des rendez vous )
    (prendre des rendez vous ).> (anulez les rendez vous) : extend
}
@enduml

@startuml
scale 2
left to right direction 
skinparam packageStyle rect 
actor personnel as p
actor hopital  as h
rectangle agenda {
    p-- (consulter)
    p-- (modifier)
    h-- (avoir un suivi )
    h--(conserver un historique )
    
}
@enduml