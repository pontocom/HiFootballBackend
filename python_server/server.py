from flask import (
    Flask,
    render_template,
    request,
    abort,
    jsonify
)

# Create the application instance
app = Flask(__name__, template_folder="templates")

# Create a URL route in our application for "/"
# This is purely to see if the server is running, there is no website planned
@app.route('/')
def home():
    """
    This function just responds to the browser ULR
    localhost:5000/

    :return:        the rendered template 'home.html'
    """
    return render_template('home.html')

nextUserID = 0

@app.route('/userID', methods=['GET'])
def get_userID():
    global nextUserID
    userID = nextUserID
    nextUserID += 1
    return jsonify({'userID': userID})

@app.route('/sendGame', methods=['POST'])
def add_game_data():
    #if not request.json or not 'userID' in request.json:
    #    abort(400)
    #user = request.json['userID']
    #print("received event data from "+ str(user))
    # save json document
    return render_template('home.html')

@app.route('/sendEvent', methods=['POST'])
def add_event_data():
    if not request.json or not 'userID' in request.json:
        abort(400)
    user = request.json['userID']
    print("received event data from "+ str(user))
    # add to document of this user
    # create file
    filename = "data/data_from_user_"+str(user)
    file = open(filename, "a+")
    file.write(str(request.json['time']) + ",")
    file.write(str(request.json['event']) + "\n")
    file.close()
    return render_template('home.html'), 201

# If we're running in stand alone mode, run the application
if __name__ == '__main__':
    app.run(debug=True)