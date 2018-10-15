@extends("crudbooster::admin_template")
@section("content")
    <!--<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">-->
    <link rel="stylesheet" href="https://unpkg.com/survey-knockout/survey.css" />
    <div id="survey-manager">
        <router-view></router-view>
        <v-snackbar
                :timeout="6000"
                bottom
                right
                multi-line
                v-model="$root.snackbar"
        >
            @{{ $root.snackbarMsg }}
            <v-btn flat color="blue" @click.native="$root.snackbar = false">Close</v-btn>
        </v-snackbar>
        <!--<v-app>
            <v-card flat>
                <v-layout row pb-2>
                    <v-flex xs12>
                        <v-card>
                            <v-card-text>
                                
                                
                            </v-card-text>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-card>
        </v-app>-->
    </div>

    <script>
        window.SurveyConfig = {!! json_encode(config('survey-manager')) !!};
    </script>
    <script src="{{asset('vendor/survey-manager/js/survey-manager.js')}}"></script>
    <script src="https://surveyjs.azureedge.net/1.0.24/survey.vue.js"></script>
@endsection
