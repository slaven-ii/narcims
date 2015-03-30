//THE WRAPPER FUNCTION
//All of code for your Gruntfile must be placed within the "wrapper" function. This convention is needed so that Grunt can understand the file
module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt); // npm install --save-dev load-grunt-tasks

    // Project configuration.
    //This method should be passed an object containing the project configuration as well as any task configuration
    grunt.initConfig({
        //imports the config.data from the package.json
        pkg: grunt.file.readJSON('./package.json'),
        //BOWERCOPY
        bowercopy: {
            options: {
                // Task-specific options go here
                srcPrefix: 'bower_components'
            },
            scripts: {
                options: {
                    destPrefix: 'static/js/vendor'
                },
                files: {
                    // dest : source
                    'modernizr/modernizr.js': 'modernizr/modernizr.js',
                    'jquery/jquery.min.js': 'jquery/dist/jquery.min.js',
                    'gsap/TweenMax.js': 'gsap/src/uncompressed/TweenMax.js',
                    'gsap/Draggable.js': 'gsap/src/uncompressed/utils/Draggable.js',
                    'jquery-waypoints/lib/jquery.waypoints.js': 'jquery-waypoints/lib/jquery.waypoints.js',
                    'slideout/dist/slideout.js': 'slideout/dist/slideout.js'
                }
            }
        },
        //COMBINE MEDIA QUERIES
        cmq: {
            options: {
                log: false
            },
            your_target: {
                files: {
                    'static/css/combined': ['static/css/*.css']
                }
            }
        },
        //The watch task executes other task when certain file are changed
        watch: {
            css: {
                files: [
                    'static/scss/**/*.scss'
                ],
                tasks: ['sass']
            },
            js: {
                files: [
                    'static/js/**.js',
                    'Gruntfile.js'
                ]
            //tasks: ['jshint']
            },
            js_frontend: {
                files: [
                    //watched files
                    './static/js/vendor/flexslider/flexslider.js',
                    './static/js/plugins.js',
                    './static/js/utils.js'
                ],
                tasks: ['concat:js_frontend','uglify:frontend']     //tasks to run
            }
        },
        sass: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                    'static/css/style.css': 'static/scss/style.scss'
                }
            }
        },
        //Checking JavaScript code for errors
        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            all: ['Gruntfile.js', 'static/js/main.js']
        },
        concat: {
            options: {
                separator: '',
                sourceMap: false
            },
            js_frontend: {
                src: [
                    './static/js/vendor/gsap/TweenMax.js',
                    './static/js/vendor/gsap/Draggable.js',
                    './static/js/vendor/jquery-waypoints/lib/jquery.waypoints.js',
                    './static/js/vendor/slideout/dist/slideout.js',
                    './static/js/plugins.js',
                    './static/js/utils.js',
                ],
                dest: './static/js/frontend.js'
            }
        },
        uglify: {
            options: {
                mangle: false  // Use if you want the names of your functions and variables unchanged
            },
            frontend: {
                files: {
                    'static/js/frontend.min.js': 'static/js/frontend.js'
                }
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'static/css/*.css',
                        'img/*',
                        'static/js/*.js',
                        '*.html',
                        //'**/*.php'
                    ]
                },
                options: {
                    watchTask: true // < VERY important
                }
            }
        }
    });

    // Load the Grunt plugins.
    //grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.registerTask('default', ['sass']);
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-bowercopy');
    grunt.loadNpmTasks('grunt-combine-media-queries');

    // Register the default tasks.
    grunt.registerTask('default', ['bowercopy', 'browserSync', 'watch']);
};


