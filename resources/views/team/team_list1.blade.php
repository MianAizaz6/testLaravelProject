
                                             
                                        @foreach($pcsirTeam as $pcsir_team)
                                                
                                               <?php
                                                $fileName="{{$pcsir_team->team_image}}";
                                                $photoURl=url('/images/team/'.$fileName);
                                               ?>
                                                
                                                {{$pcsir_team->id}}
                                                {{$photoURl}}
                                                {{$pcsir_team->team_name}}
                                                {{$pcsir_team->tem_role}}
                                                 
                                            
                                            @endforeach
