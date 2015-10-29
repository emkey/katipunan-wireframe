module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'expanded',
          sourceMap: true,
        },
        files: {
          'web/css/app.css': 'scss/app.scss'
        }
      }
    },
copy: {
	main: {
		files: 
		[{
			expand: true,
			src: ['bower_components/foundation/js/foundation.min.js'],
			dest: 'web/js/',
			flatten: true,
			filter: 'isFile',
		},
		{
			expand: true,
			src: ['bower_components/jquery/dist/jquery.min.js'],
			dest: 'web/js/',
			flatten: true,
			filter: 'isFile',
		},
		{
			expand: true,
			src: ['bower_components/modernizr/modernizr.js'],
			dest: 'web/js/',
			flatten: true,
			filter: 'isFile',
		},
		{
			expand: true,
			src: ['js/app.js'],
			dest: 'web/js/',
			flatten: true,
			filter: 'isFile',
		},
		],
	},
},

    watch: {
      grunt: {
        options: {
          reload: true
        },
        files: ['Gruntfile.js']
      },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');


  grunt.registerTask('build', ['sass']);
  grunt.registerTask('default', ['build', 'copy', 'watch']);
}
