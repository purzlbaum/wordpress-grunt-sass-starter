module.exports = function(grunt) {

// 1. All configuration goes here
grunt.initConfig({
pkg: grunt.file.readJSON('package.json'),

concat: {
dist: {
src: [
'js/plugins/jquery.min.js',
'js/plugins/fitvids.js',
'js/plugins/owl.carousel.min.js',
'js/bootstrap/affix.js',
'js/bootstrap/collapse.js',
'js/bootstrap/dropdown.js',
'js/bootstrap/scrollspy.js',
'js/bootstrap/transition.js',
'js/themefunctions.js'
],
dest: 'js/theme.js'
}
},

uglify: {
build: {
src: 'js/theme.js',
dest: 'js/theme.min.js'
}
},

watch: {
options: {
livereload: true
},
scripts: {
files: ['js/*.js'],
tasks: ['concat', 'uglify'],
options: {
spawn: false
}
},
css: {
files: ['sass/*.sass'],
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
'css/default.css': 'sass/default.sass'
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
