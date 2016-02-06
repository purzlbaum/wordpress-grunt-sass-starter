module.exports = function(grunt) {

  // 1. All configuration goes here
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      dist: {
        src: [
          'assets/bower_components/jquery/dist/jquery.min.js',
          'assets/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
          'assets/js/themefunctions.js'
        ],
        dest: 'assets/js/theme.js'
      }
    },

    uglify: {
      build: {
        src: 'assets/js/theme.js',
        dest: 'assets/js/theme.min.js'
      }
    },

    watch: {
      options: {
        livereload: true,
      },
      scripts: {
        files: ['assets/js/**/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
          spawn: false
        }
      },
      css: {
        files: ['assets/sass/**/*.sass'],
        tasks: ['sass'],
        options: {
          spawn: false
        }
      }
    },

    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'assets/css/default.css': 'assets/sass/default.sass'
        }
      }
    }

  });

  // 3. Where we tell Grunt we plan to use this plug-in.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask('default', ['concat', 'uglify', 'watch', 'sass']);

};
