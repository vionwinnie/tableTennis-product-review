import dash
import dash_html_components as html
import dash_core_components as dcc
import plotly.graph_objects as go
from dash.dependencies import Input, Output,State
import dash_bootstrap_components as dbc 
from dash.exceptions import PreventUpdate
import pandas as pd
import createBarChart as cbc
import connectDb as c
import nameConversion as nm
import json
import displayComments as dc 

## Initialize app with CSS stylesheets
external_stylesheets = [dbc.themes.BOOTSTRAP,'https://codepen.io/chriddyp/pen/bWLwgP.css']

app = dash.Dash(__name__, 
        external_stylesheets=external_stylesheets,
        title='Rubber Shopper!')

## Intialize Sqlite3 db connection
con = c.connect_to_db()

## Initialize name conversion
revspin_dict, dropdown_menu = nm.rubbers_conversion()
## Define Dropdown Menu Components
dropdown_menu1=dcc.Dropdown(
        id='demo-dropdown1',
        options= dropdown_menu,
        value='',
        style={'float': 'center','margin': 'auto'},
        placeholder="Select Rubber A"
        )
dropdown_menu2=dcc.Dropdown(
        id='demo-dropdown2',
        options= dropdown_menu,
        value='',
        style={'float': 'center','margin': 'auto'},
        placeholder="Select Rubber B"
        )

nested_column = [
        dbc.Row([
            dbc.Col(
                html.Div([
                    html.Button('Next', 
                        id='btn-nclicks-1', 
                        n_clicks=0,
                        className="pageScrollBtn"),
                    html.Button('Previous', 
                        id='btn-nclicks-2', 
                        n_clicks=0,
                        className="pageScrollBtn")
                ]))
            ],className="btn-div"),
        dbc.Row([
            dbc.Col(
                html.Div([
                    html.Img(className = "avatar",
                            id="avatar-1",
                            src="/assets/icons/png/006-moon.png")]),width=2),
            dbc.Col(
                html.Div([
                    html.P(className = "comments-text",
                            id="comment-display-1",
                            children=["Comments-1"]),
                    dcc.Interval(id="update-nested1",interval=1000)],
                            id = "comment-block-1",
            )),
        ],
        className = "comment-block"
        ),
        dbc.Row([
            dbc.Col(html.Div([
            html.Img(className = "avatar",
                id="avatar-2",
                src="/assets/icons/png/025-chicken.png")])
            ,width=2),
            dbc.Col(html.Div([
            html.P(className = "comments-text",
                id="comment-display-2",
                children=["Comments-2"]),
            dcc.Interval(id="update-nested2",interval=1000)],
            id = "comment-block-2",
            )),
             #   className = "comment-block"
        ],
            className = "comment-block"
        ),
        dbc.Row([
            dbc.Col(html.Div([
            html.Img(className = "avatar",
                id="avatar-3",
                src="/assets/icons/png/043-cactus.png")])
            ,width=2),
            dbc.Col(html.Div([
            html.P(className = "comments-text",
                id="comment-display-3",
                children=["Comments-3"]),
            dcc.Interval(id="update-nested3",interval=1000)],
            id = "comment-block-3",
            )),
        ],
                className = "comment-block"
        ),
        dbc.Row([
            dbc.Col(html.Div([
            html.Img(className = "avatar",
                id="avatar-4",
                src="/assets/icons/png/033-penguin.png")])
            ,width=2),
            dbc.Col(html.Div([
            html.P(className = "comments-text",
                id="comment-display-4",
                children=["Comments-4"]),
            dcc.Interval(id="update-nested8",interval=1000)],
            id = "comment-block-4",
            )),
        ],
                className = "comment-block"
        ),
    ]

app.layout = html.Div([
    html.H1('Your Go-To Table Tennis Rubber Analyzer',
        style={'text-align':'center','margin-top':'30px'}),
    ## Row with columns
    dbc.Row(
    [
                dbc.Col(dropdown_menu1,
                    width={"size": 3, "order": "first", "offset":3 }),
                dbc.Col(dropdown_menu2,
                    width={"size": 3, "order": "first",  })
    ]),
    dbc.Row([dbc.Col(html.Div(id='dd-entity-container'))],style={"margin-top": "15px","text-align":"center"}),
    dbc.Row([
        dbc.Col(
            html.Div([
            html.Div([
                    html.Div([
                            html.H4(id = "status-bar",
                            className = "subtitle",
                            children=["Online Forum Opinion Mining Results"])]),

                            dcc.Interval(id="update4",interval=1000)
                            ]),
            dcc.Graph(style={'height':300},id='comparison-graph'),
            html.Div([html.P(children='init',id='hover-check')],style={'display': 'none'})
            ]),
        width={"size": 5, "order": "first", "offset": 1}),
        dbc.Col(
            html.Div([
            html.Div([
                    html.Div([
                            html.H4(id = "status-selected-comments",
                            className = "subtitle",
                            children=["Selected Comments"])]),
                            dcc.Interval(id="update6",interval=1000)
                            ]),
            html.Div(nested_column,id='comment-container',
                    className='dataTable'),]),
        width={"size": 5, "order": "last"})],
        style={"margin-top":"15px"},),

    #dbc.Row([dbc.Col(dcc.Graph(style={'height':300},id='comparison-graph'),
    #    width={"size": 5, "order": "first", "offset": 1})],
    #    style={"margin-top":"15px"},),
    dbc.Row([
        dbc.Col(
            html.Div([
            html.Div([
                    html.Div([
                            html.H4(id = "status",
                            className = "subtitle",
                            children=["init"])]),

                            dcc.Interval(id="update1",interval=1000)
                            ]),
            html.Div(id='table-container',
                    className='dataTable'),]),
            width={"size": 4, "order": "first","offset":1},),
        dbc.Col(
            html.Div([
            html.Div([
                    html.Div([
                            html.H4(id = "status-wordcloud1",
                            className = "subtitle",
                            children=["init"])]),

                            dcc.Interval(id="update2",interval=1000)
                            ]),
            html.Img(id='wordcloud-entity1',
            className='wordcloud'),]),
            width=3),
        dbc.Col(
            html.Div([
            html.Div([
                    html.Div([
                            html.H4(id = "status-wordcloud2",
                            className = "subtitle",
                            children=["init"])]),
                            dcc.Interval(id="update3",interval=1000)
                            ]),
            html.Img(id='wordcloud-entity2',
            className='wordcloud')]),
            width=3),
        html.Div(id='intermediate-value', style={'display': 'none'}),
        html.Div(id='intermediate-value2',style={'display': 'none'})],
        style={"margin-top":"80px"},
        justify='start'),
    ]
   ,className="dash-bootstrap")

## store data in hidden div
@app.callback(
    [Output('intermediate-value', 'children'),
        Output('intermediate-value2','children')],
    [Input('demo-dropdown1', 'value'),
        Input('demo-dropdown2', 'value')])
def store_df(value1,value2):
    if not value1 or not value2:
        return None,None
    elif value1 == value2:
        return None,None
    else:
        rubber_a,rubber_b = (value1,value2) if value1<value2 else (value2,value1)
        df = c.retrieve_comparative_comments(rubber_a,rubber_b)
        print(rubber_a,rubber_b)
        print(df.shape)
        if df.shape[0]==0:
            return None,None
        else:
            return df.to_json(),0

## Update stacked bar chart based on intermediate output
@app.callback(Output('comparison-graph', 'figure'), 
        [Input('intermediate-value', 'children'),
            Input('demo-dropdown1', 'value'),
            Input('demo-dropdown2', 'value')])
def update_graph2(json_cleaned_data,value1,value2):
    graph_output = {'data':[], 'layout':go.Layout()}
    if json_cleaned_data:
        df = pd.read_json(json_cleaned_data)
        rubber_a,rubber_b = (value1,value2) if value1 < value2 else (value2,value1)
        tally_df = cbc.transform_df_barchart(rubber_a,rubber_b,df)
        graph_output = cbc.create_chart(tally_df,rubber_a,rubber_b)
    return graph_output

## Display Table Name
@app.callback(Output("status", "children"),
              [Input('demo-dropdown1', 'value'),
               Input('demo-dropdown2', 'value')])
def update_statusBar(value1,value2):
    if value1 and value2:
        return "RevSpin Data"

## update textbox from dropdown menu
@app.callback(
    Output('dd-entity-container', 'children'),
    [Input('demo-dropdown1', 'value'),
    Input('demo-dropdown2', 'value')])
def update_output(value1,value2):
    if not value1  or not value2:
        return "Please select two rubbers!"
    elif value1 == value2:
        return "You have selected the same rubber twice. Try again"
    else:
        return 'You are now comparing {} against {}!'.format(value1,value2)

@app.callback(
    Output('table-container', 'children'),
    [Input('demo-dropdown1', 'value'),
    Input('demo-dropdown2', 'value')])
def update_output(value1,value2):
    if len(value1)==0 or len(value2)==0:
        return None
    elif value1 == value2:
        return None
    else:
        rubber1 = revspin_dict.get(value1,None)
        rubber2 = revspin_dict.get(value2,None)
        df = c.retrieve_two_rubbers_stats(rubber1,rubber2,transpose=True)
        table = dbc.Table.from_dataframe(df, striped=True, 
                                     bordered=True, 
                                     hover=True,
                                     dark=True,
                                     responsive=True)
        return table


## update wordcloud1 and title from dropdown menu
static_image_route = '/assets/wordcloud/'
@app.callback(
    [Output('wordcloud-entity1', 'src'),
        Output('status-wordcloud1','children')],
    [Input('demo-dropdown1', 'value')])
def update_image_src_and_title(value):
    if not value:
        return None,None
    else:
        path = static_image_route + value + '-black.png'
        title = value.replace('-',' ')+ " Wordcloud"
        return path,title

## Update wordcloud2 and title2
@app.callback(
    [Output('wordcloud-entity2', 'src'),
        Output('status-wordcloud2','children')],
    [Input('demo-dropdown2', 'value')])
def update_image_src_and_title(value):
    if not value:
        return None,None
    else:
        path = static_image_route + value + '-red.png'
        title = value.replace('-',' ')+ " Wordcloud"
        return path,title

## Update hover data
@app.callback(Output("hover-check",'children'),
        [Input('comparison-graph','hoverData')])
def display_hover_data(hoverData):
    return json.dumps(hoverData,indent=2)

## Display First 4 Comments upon hovering
@app.callback([Output("comment-display-1","children"),
                Output("comment-display-2","children"),
                Output("comment-display-3","children"),
                Output("comment-display-4","children"),
                Output("btn-nclicks-2", "n_clicks"),
                Output("btn-nclicks-1", "n_clicks")],
     #           Output("intermediate-value2","children")],
            [Input('intermediate-value', 'children'),
                Input('hover-check','children')])
    #            Input("btn-nclicks-2", "n_clicks")])
def update_comments(json_cleaned_data,hoverData):
    if hoverData not in('None','null') and json_cleaned_data:
        #print("if clause 1")
        
        short_df = dc.subset_data(hoverData,json_cleaned_data)
        comments = ['','','','']

        if short_df.shape[0] >0:
            ## Insert Comments
            comments_array = list(short_df['COMMENT_TEXT'])
            for i,cur_comment in enumerate(comments_array):
                if i<4:
                    comments[i] = cur_comment
                    last_idx = i
        
        ## Return comment text and reset n-clicks index and cur-idx
        return comments[0],comments[1],comments[2],comments[3],0,0

    elif json_cleaned_data:
        #print("if clause 2")
        return None,None,None,None,0,0
    else:
        #print("if clause 3")
        return None,None,None,None,0,0


if __name__ == '__main__':
    app.run_server(debug=True,port=8888)
